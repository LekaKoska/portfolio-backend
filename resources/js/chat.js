const messagesContainer = document.getElementById('chat-messages');
const input = document.getElementById('chat-input');
const btn = document.getElementById('send-btn');

function addMessage(text, role) {
    const row = document.createElement('div');
    row.className = 'flex items-start gap-3' + (role === 'user' ? ' flex-row-reverse' : '');

    const avatar = document.createElement('div');
    avatar.className = 'w-8 h-8 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-xs font-semibold text-slate-600 shrink-0';
    avatar.textContent = role === 'user' ? 'You' : 'AI';

    const bubble = document.createElement('div');
    bubble.className = role === 'user'
        ? 'rounded-2xl rounded-tr-sm bg-slate-900 px-4 py-3 text-sm text-white leading-relaxed max-w-xs lg:max-w-sm'
        : 'rounded-2xl rounded-tl-sm bg-white border border-slate-200 px-4 py-3 text-sm text-slate-700 leading-relaxed max-w-xs lg:max-w-sm';
    bubble.textContent = text;

    row.appendChild(avatar);
    row.appendChild(bubble);
    messagesContainer.appendChild(row);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function showTyping() {
    const row = document.createElement('div');
    row.id = 'typing-indicator';
    row.className = 'flex items-start gap-3';
    row.innerHTML = `
        <div class="w-8 h-8 rounded-xl bg-white border border-slate-200 flex items-center justify-center text-xs font-semibold text-slate-600 shrink-0">AI</div>
        <div class="rounded-2xl rounded-tl-sm bg-white border border-slate-200 px-4 py-3 flex items-center gap-1">
            <span class="w-1.5 h-1.5 rounded-full bg-slate-400 animate-bounce" style="animation-delay:0ms"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-400 animate-bounce" style="animation-delay:150ms"></span>
            <span class="w-1.5 h-1.5 rounded-full bg-slate-400 animate-bounce" style="animation-delay:300ms"></span>
        </div>`;
    messagesContainer.appendChild(row);
    messagesContainer.scrollTop = messagesContainer.scrollHeight;
}

function removeTyping() {
    document.getElementById('typing-indicator')?.remove();
}

function hideChips() {
    document.querySelectorAll('.chip').forEach(c => c.parentElement.remove());
}

async function sendMessage(text) {
    const message = text || input.value.trim();
    if (!message) return;

    hideChips();
    addMessage(message, 'user');
    input.value = '';
    btn.disabled = true;
    showTyping();

    try {
        const response = await fetch('/chat', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ 'chat-message': message })
        });

        const data = await response.json();
        removeTyping();
        addMessage(data.reply.text, 'ai');
    } catch (error) {
        removeTyping();
        addMessage('Something went wrong. Please try again.', 'ai');
    } finally {
        btn.disabled = false;
        input.focus();
    }
}

btn.addEventListener('click', () => sendMessage());
input.addEventListener('keydown', e => { if (e.key === 'Enter') sendMessage(); });

document.querySelectorAll('.chip').forEach(chip => {
    chip.addEventListener('click', () => sendMessage(chip.textContent.trim()));
});


