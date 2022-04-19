function change(){
    if(localStorage.getItem('id') != null){
        const value = localStorage.getItem('id');
        if(document.getElementById(value) != null){
            document.getElementById(value).style.display = "none";
            localStorage.removeItem('id')
        }
    }
    if(localStorage.getItem("map") != null){
        document.getElementById(localStorage.getItem("map")).style.display = "none";
        localStorage.removeItem("map");
    }
    const name = document.querySelector("#input1").value
    // const name = document.getElementById("Re_name")
    
    console.log(name)
    document.getElementById(name).style.display = "grid";
    localStorage.setItem("id",name)
}
function change2(){
    if(localStorage.getItem('id2') != null){
        const value = localStorage.getItem('id2');
        if(document.getElementById(value) != null){
            document.getElementById(value).style.display = "none";
            localStorage.removeItem('id2')
        }
    }
    if(localStorage.getItem("map") != null){
        document.getElementById(localStorage.getItem("map")).style.display = "none";
        localStorage.removeItem("map");
    }
    const name = document.querySelector("#input2").value
    // const name = document.getElementById("Re_name")
    
    console.log(name)
    document.getElementById(name).style.display = "grid";
    localStorage.setItem("id2",name)
}
function change3(){
    if(localStorage.getItem('id3') != null){
        const value = localStorage.getItem('id3');
        if(document.getElementById(value) != null){
            document.getElementById(value).style.display = "none";
            localStorage.removeItem('id3')
        }
    }
    if(localStorage.getItem("map") != null){
        document.getElementById(localStorage.getItem("map")).style.display = "none";
        localStorage.removeItem("map");
    }
    const name = document.querySelector("input").value
    // const name = document.getElementById("Re_name")
    
    console.log(name)
    document.getElementById(name).style.display = "grid";
    localStorage.setItem("id3",name)
}