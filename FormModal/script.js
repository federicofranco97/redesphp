
function CargarTodo(){
    document.getElementById("btnMostrar").onclick=MostrarModal;
    document.getElementById("modalContainer").style.display="none";
    document.getElementById("btnModalClose").onclick=ApagarModal;
    CargarData();
}

function MostrarModal(){
    LlenarCampos();
    document.getElementById("mainContainer").style="opacity: 0.2;pointer-events: none;";
    document.getElementById("modalContainer").style.display="";
    document.getElementById("modalContainer").style="opacity: 1;pointer-events: auto;";
}

function ApagarModal(){
    document.getElementById("mainContainer").style="opacity: 1;pointer-events: auto;";
    document.getElementById("modalContainer").style.display="none";
}

var JsonObj;
var selectBox;

function CargarData(){
    selectBox = document.getElementById("idSelect");
    JsonObj = JSON.parse(GetStringJson());
    for(var i = 0 ; i<JsonObj.length;i++){
        var opt = document.createElement("option");
        opt.innerHTML = JsonObj[i].name;
        opt.value=i;
        selectBox.appendChild(opt);
    }
    LlenarCampos();
    selectBox.onchange=function(){
        OnDataSelected();
    };
};


function OnDataSelected(){
    document.getElementById("NombreInput").value=JsonObj[selectBox.value].name;
    document.getElementById("NacimientoInput").value=JsonObj[selectBox.value].age;
    document.getElementById("SaldoInput").value=JsonObj[selectBox.value].salary;   
}

function LlenarCampos(){
    document.getElementById("NombreInput").value=JsonObj[0].name;
    document.getElementById("NacimientoInput").value=JsonObj[0].age;
    document.getElementById("SaldoInput").value=JsonObj[0].salary;
}

function GetStringJson(){
    var sth = [{name:"Marcos",salary:150,age:3},{name:"Juan",salary:180,age:30},{name:"Manuel",salary:50,age:55}];
    var jsonn = JSON.stringify(sth);
    return jsonn;
}

