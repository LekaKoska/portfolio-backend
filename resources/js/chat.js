const button = document.getElementById("send-btn");
button.addEventListener( "click", (async) =>
{
    const chatDiv = document.querySelector("#chat-messages");

    let input = document.querySelector("#chat-input").value;

    let chatResponse = document.createElement("div");
    chatResponse.innerHTML += `<div> ${input} </div>`

    chatDiv.appendChild(chatResponse);


})


