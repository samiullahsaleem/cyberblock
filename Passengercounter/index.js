

let countEl = document.getElementById("count-el")
let saveEl = document.getElementById("save-el")

console.log(countEl)

let count = 0
nice
function increment() {
    count = count + 1
    countEl.innerText = count
}

function save()
{
    let countStr = count + " - "
    // saveEl.innerText += countStr
    saveEl.textContent += countStr
}

function reset()
{
    countEl.innerText = 0
    count = 0
    saveEl.textContent = "Previous entries: "
}


