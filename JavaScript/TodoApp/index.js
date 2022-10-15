var data = (localStorage.getItem('todoList')) ? JSON.parse(localStorage.getItem('todoList')): {
    todo: [],
    complete: []
};




var removeSVG = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve"><rect class="noFill" width="22" height="22"/><g><g><path class="fill" d="M16.1,3.6h-1.9V3.3c0-1.3-1-2.3-2.3-2.3h-1.7C8.9,1,7.8,2,7.8,3.3v0.2H5.9c-1.3,0-2.3,1-2.3,2.3v1.3c0,0.5,0.4,0.9,0.9,1v10.5c0,1.3,1,2.3,2.3,2.3h8.5c1.3,0,2.3-1,2.3-2.3V8.2c0.5-0.1,0.9-0.5,0.9-1V5.9C18.4,4.6,17.4,3.6,16.1,3.6z M9.1,3.3c0-0.6,0.5-1.1,1.1-1.1h1.7c0.6,0,1.1,0.5,1.1,1.1v0.2H9.1V3.3z M16.3,18.7c0,0.6-0.5,1.1-1.1,1.1H6.7c-0.6,0-1.1-0.5-1.1-1.1V8.2h10.6V18.7z M17.2,7H4.8V5.9c0-0.6,0.5-1.1,1.1-1.1h10.2c0.6,0,1.1,0.5,1.1,1.1V7z"/></g><g><g><path class="fill" d="M11,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6s0.6,0.3,0.6,0.6v6.8C11.6,17.7,11.4,18,11,18z"/></g><g><path class="fill" d="M8,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6v6.8C8.7,17.7,8.4,18,8,18z"/></g><g><path class="fill" d="M14,18c-0.4,0-0.6-0.3-0.6-0.6v-6.8c0-0.4,0.3-0.6,0.6-0.6c0.4,0,0.6,0.3,0.6,0.6v6.8C14.6,17.7,14.3,18,14,18z"/></g></g></g></svg>';
var completeSVG = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22 22" style="enable-background:new 0 0 22 22;" xml:space="preserve"><rect y="0" class="noFill" width="22" height="22"/><g><path class="fill" d="M9.7,14.4L9.7,14.4c-0.2,0-0.4-0.1-0.5-0.2l-2.7-2.7c-0.3-0.3-0.3-0.8,0-1.1s0.8-0.3,1.1,0l2.1,2.1l4.8-4.8c0.3-0.3,0.8-0.3,1.1,0s0.3,0.8,0,1.1l-5.3,5.3C10.1,14.3,9.9,14.4,9.7,14.4z"/></g></svg>';


renderList();
function clickAddButton() {
    console.log("Add button is clicked by you !");
    var values = document.getElementById("item").value;
    if (values) {
        data.todo.push(values);
        console.log(data);
        addValues(values);
        document.getElementById("item").value = "";
    }
}

document.getElementById('item').addEventListener('keydown', function (e) {
    console.log(e.code);
    var v = this.value;
    if (e.code == "Enter" && v) {
        console.log(v);
        addValues(v);
        data.todo.push(v);
        document.getElementById('item').value = "";
        updateDataStorage();
    }
    
});


function updateDataStorage() {
    console.log(JSON.stringify(data));
    console.log(data);
    localStorage.setItem('todoList', JSON.stringify(data));
}


function completeitem() {
    var item = this.parentNode.parentNode;
    var list = item.parentNode;
    var id = list.id;
    var value = item.innerText;
    
    if (id == "todo") {
        data.todo.splice(data.todo.indexOf(value), 1);
        data.complete.push(value);
    }
    else {
        data.complete.splice(data.complete.indexOf(value), 1);
        data.todo.push(value);
    }
    updateDataStorage();




    var target = (id == 'todo') ? document.getElementById('completed') : document.getElementById('todo');

    console.log(target);
    list.removeChild(item);
    target.insertBefore(item, target.childNodes[0]);
}

function removeitem() {
    var item = this.parentNode.parentNode;
    var list = item.parentNode;
    var id = list.id;
    var value = list.innerText;
    if (id == "todo") {
        data.todo.splice(data.todo.indexOf(value), 1);  
    }
    else {
        data.complete.splice(data.complete.indexOf(value), 1);
    }
    list.removeChild(item);
    updateDataStorage();
}



function addValues(text, complete) {

    var list = (complete)? document.getElementById("completed"):   document.getElementById("todo");
    console.log(list);
    console.log("I am running inside : " + text);
    var item = document.createElement('li');
    item.innerText = text;

    var buttons = document.createElement('div');
    buttons.classList.add("buttons");

    var remove = document.createElement('button');
    remove.classList.add("remove");
    remove.innerHTML = removeSVG;
    remove.addEventListener('click', removeitem);

    var check = document.createElement('button');
    check.classList.add("check");
    check.innerHTML = completeSVG;
    check.addEventListener('click', completeitem);

    buttons.appendChild(remove);
    buttons.appendChild(check);
    item.appendChild(buttons);
    if (complete) {
        list.insertBefore(item, list.childNodes[1]);
    }
    else {
        list.insertBefore(item, list.childNodes[0]);
    }

    updateDataStorage();
}


function renderList() {
    if (!data.todo.length && !data.complete.length)
        return;
    for (var i = 0; i < data.todo.length; i++) {
        console.log(data.todo[i]);
        addValues(data.todo[i]);
    }
    for (var j = 0; j < data.complete.length; j++) {
        console.log(data.complete[j]);
        addValues(data.complete[j],true);
    } 
}




var addButton = document.getElementById('add');
addButton.addEventListener("click", clickAddButton);