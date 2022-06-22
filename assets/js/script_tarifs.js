window.addEventListener('load', function (){

console.log('oui');

document.querySelector('#checbox').addEventListener('click', ()=>{
    console.log("l'event fonctionne");
    check()
  })


function check() {
    const checkBox = document.getElementById("checbox");
    const text1 = document.getElementsByClassName("text1");
    const text2 = document.getElementsByClassName("text2");
  
    for (var i = 0; i < text1.length; i++) {
      if (checkBox.checked == false) {
        text1[i].style.display = "block";
        text2[i].style.display = "none";
      } else{
        text1[i].style.display = "none";
        text2[i].style.display = "block";
      }
    }
  }
})