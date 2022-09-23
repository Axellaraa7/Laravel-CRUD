export default function reduceText(elements, charMax, charLimit){
  elements.filter(element => element.textContent.length > charMax).forEach( element => {
    let newText = "", cont = 0;
    while(cont < charLimit){ newText += element.textContent[cont]; cont++; }
    newText += "...";
    element.textContent = newText;
  });
}