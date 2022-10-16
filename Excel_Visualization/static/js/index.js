const text = document.querySelector(".text");
const form = document.querySelector("form");
const std_fname = document.querySelector("#std_fname");
const std_email = document.querySelector("#std_email");
const std_role = document.querySelector("#std_role");
const std_applied = document.querySelector("#std_applied");
const std_sem = document.querySelector("#std_sem");
const std_program = document.querySelector("#std_program");
const Time = document.querySelector("#Time");
const std_problem_solving = document.querySelector("#std_problem_solving");

const is_community = document.querySelector("#is_community");
const community_role = document.querySelector("#community_role");

const motivation = document.querySelector("#motivation");
const Describe = document.querySelector("#Describe");
const Else = document.querySelector("#Else");

const alert = document.querySelector("#alert");



let clearData = () =>{
    std_fname.innerHTML = "";
    std_email.innerHTML = "";
    // std_phone.innerHTML = "";
    std_role.innerHTML = "";
    std_sem.innerHTML = "";
    std_program.innerHTML = "";
    std_applied.innerHTML = "";
    Time.innerHTML = "";

    std_problem_solving.innerHTML = "";
    is_community.innerHTML = "";
    community_role.innerHTML = "";

    motivation.innerHTML = "";
    Describe.innerHTML = "";
    Else.innerHTML = "";
}

let handleData = (data) =>{
    if(data.Error){
        alert.innerHTML = `
            <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                ${data.Error}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        return;
    }

    std_fname.innerHTML = data.Name;
    std_email.innerHTML = data.Email;
    // std_phone.innerHTML = data.phone;
    std_role.innerHTML = data.Role;
    std_sem.innerHTML = data.Semester;
    std_program.innerHTML = data.Program;
    std_applied.innerHTML = data.Lead_or_Member;
    Time.innerHTML = data.Time;

    let pbsl = parseInt(data.Problem_Solving_Skills)*10;
    std_problem_solving.innerHTML = `${pbsl}%`;
    std_problem_solving.style.width = `${pbsl}%`;

    is_community.innerHTML = data.is_community;
    community_role.innerHTML = data.community_role;

    motivation.innerHTML = data.motivation;
    Describe.innerHTML = data.Describe;
    Else.innerHTML = data.Else;
}

form.addEventListener("submit", (e)=>{
    e.preventDefault();
    let val = form.querySelector(".id").value;
    clearData();
    ajax(
        {
            method: 'GET',
            url: "/jsondata/"+val,
            onsuccess: function(responseText){
                data = JSON.parse(responseText);
                handleData(data);
            }
        }
    )

    val.value="";
})
