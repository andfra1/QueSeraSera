var main = document.getElementById('wrap'); 
var addRowBttn = document.getElementsByClassName('jsAddRow');
var rmRowBttn = document.getElementsByClassName('jsRmRow');
var row = document.getElementsByClassName('row');
var col = document.getElementsByClassName('jsAddCol');
var addRowBttnLen = addRowBttn.length;
//var rmRowBttnLen = rmRowBttn.length;
var colLen = col.length;

window.addEventListener('DOMContentLoaded', function() {

for(var rowBttn = 0; rowBttn < addRowBttnLen; rowBttn++) {
  addRowBttn[rowBttn].addEventListener('click', addRow, false);
}

rmRowBttn[0].addEventListener('click', removeRow, false);

console.log(rmRowBttn);

function addRow() {
  var colArr = [];
  var rowElement = document.createElement('DIV');
  rowElement.setAttribute('class','row');
  for(var colBttns = 0; colBttns < 9; colBttns++) {
    colArr.push('<button class="btn btn--col jsAddCol">col ' + (colBttns+1) + '</button>');
  }
  colArr.push('<button class="btn btn--minus jsRmCol">-</button>');
  rowElement.innerHTML = colArr.splice(',').join('');
  main.appendChild(rowElement);

  for(var rowRmBttn = 0; rowRmBttn < rmRowBttn.length; rowRmBttn++) {
    rmRowBttn[rowRmBttn].addEventListener('click', removeRow, false);
    console.log('yay');
  }

  return false;
}

function removeRow() {
  console.log('click!');
  //row[this].remove();
  //return false;
}

function addCol() {
  document.write = 'dupa';
}

});