import ReduceText from "./modules/ReduceText.js";

const d = document;

d.addEventListener("DOMContentLoaded",()=>{
  switch(location.pathname){
    case "/sciences":
      const par = [...d.querySelectorAll(".pgph-3")];
      ReduceText(par,200,150);
      break;
    case location.pathname.match(/\/sciences\/[1-9][0-9]*/)?.input:
      d.addEventListener("click",(event) =>{
        if(event.target.matches("#delete")) d.querySelector('.modal').classList.remove("dNone");
        if(event.target.matches(".modal-close")) d.querySelector('.modal').classList.add("dNone");
      });
      break;
    default:
      break;
  }
  
});