
data = JSON.parse(localStorage.getItem(data));

localStorage.getItem(localStorage.key('todoList'));


// fügt neues Item zu der Liste hinzu
function addItemToDOM(text, completed){
    var list = (completed) ? document.getElementById('completed') : document.getElementById('todo');

    var item  = document.createElement('li');
    item.innerText = text;


    var buttons = document.createElement('div');
    buttons.classList.add('buttons');

    var remove = document.createElement('button');
    remove.classList.add('remove');
    remove.innerHTML = removeSVG;


//item soll verschwinden wenn auf mülleimer geklickt wird
    remove.addEventListener('click', removeItem);

    var complete = document.createElement('button');
    complete.classList.add('complete');
    complete.innerHTML = completeSVG;

    var date = document.createElement('button');
    date.classList.add('complete');

//item soll erledigt werden
    complete.addEventListener('click', completeItem);

    buttons.appendChild(remove);
    buttons.appendChild(complete);
    item.appendChild(buttons);

    list.insertBefore(item, list.childNodes[0]);

}


/*
const iframe = iframe = document.getElementById('completed')
iframe.contentWindow.postMessage({
  action: 'get',
  key: 'keyForData'
})
window.addEventListener("message", messageHandler, false);
function messageHandler(event) {
  const { action, key, value } = event.dat
  if (action == 'returnData'){
    useData(key, value)
  }
}
*/