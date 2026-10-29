const  calory_goal = 2000;
let sum = 0;
let count=0;

function pass() {
    count++;
    let input1 = Number(document.getElementById("input1").value);
    
    sum+= input1;

    if(sum >= 0 && sum <= 800)
    {
        document.getElementById("feedback").innerText="You're off to healthy start!";
    }

    else if(sum > 800 && sum <= 1600)
    {
        document.getElementById("feedback").innerText="Good progress, keep it balanced!";
    }

    else if(sum > 1600 && sum <= 1800)
    {
        document.getElementById("feedback").innerText="Almost at your limit!";
    }
    else{
        document.getElementById("feedback").innerText="Goal reached! Stay mindful!";

    }

    if(count >10 && sum < calory_goal)
    {
        document.getElementById("feedback").innerText = "Be cautions of frequent snacking!";
    }

    document.getElementById("total_calory").innerText = "total calory: " + sum;
    document.getElementById("entry").innerText = "Total enrty: " + count;

document.getElementById("input1").value = " ";


}