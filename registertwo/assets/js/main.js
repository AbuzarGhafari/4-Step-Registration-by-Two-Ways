
function init()
{
    $("#prevBtn").hide();
    $("#submitBtn").hide();
}

function openModal()
{
    $("#modalContainer").addClass("show");
    $("#modalContainer .modalBody .modalItem:first").addClass("show");
}

function closeModal()
{
    $("#modalContainer").removeClass("show");
}

function showErrorBox(error)
{
    $("#inputError").addClass("show");
    $("#error").text(error);
    setTimeout(function() {closeErrorBox()}, 2000);
}

function closeErrorBox()
{
    $("#inputError").removeClass("show");
}

function showInformation()
{
    $("#showname").text($("#name").val());
    $("#showemail").text($("#email").val());
    $("#showphone").text($("#phone").val());
    $("#showaddress").text($("#address").val());
    $("#showfile1").text($("#file1").val().match(/[^\\/]*$/)[0]);
    $("#showfile2").text($("#file2").val().match(/[^\\/]*$/)[0]);
    $("#showfile3").text($("#file3").val().match(/[^\\/]*$/)[0]);
    $("#showfile4").text($("#file4").val().match(/[^\\/]*$/)[0]);
    $("#showlink1").text($("#link1").val());
    $("#showlink2").text($("#link2").val());
    $("#showlink3").text($("#link3").val());
    $("#showlink4").text($("#link4").val());
}
        

function nextStep()
{    
    var step = $("#modalContainer .modalBody .modalItem.show").data("step");
    
    if(step == 1){
        if(!validateStepone()) return;
    } 
    if(step == 2){
        if(!validateStepTwo()) return;
    } 
    if(step == 3){
        if(!validateStepThree()) return;
    }
    var currentStep = $("#modalContainer .modalBody .modalItem.show");
    currentStep.removeClass("show");
    currentStep.next().addClass("show"); 
    changeButtonsStatus();
}

function prevStep()
{
    var currentStep = $("#modalContainer .modalBody .modalItem.show");
    currentStep.removeClass("show");
    currentStep.prev().addClass("show");
    changeButtonsStatus();
}

function changeButtonsStatus()
{
    var step = $("#modalContainer .modalBody .modalItem.show").data("step");
    if(step == 4){
        $("#submitBtn").show();
        $("#prevBtn").show();
        $("#nextBtn").hide();
        showInformation();
    }else if(step == 1){
        $("#submitBtn").hide();
        $("#prevBtn").hide();
        $("#nextBtn").show();
    }else {
        $("#submitBtn").hide();
        $("#prevBtn").show();
        $("#nextBtn").show();
    }

}



function validateStepone()
{
    if(!$("#name").val()){showErrorBox("Name is required!!"); return false;}
    if(!$("#email").val()){showErrorBox("Email is required!!"); return false;}
    if(!$("#phone").val()){showErrorBox("Phone is required!!"); return false;}
    if(!$("#address").val()){showErrorBox("Address is required!!"); return false;}
    return true;    
}

function validateStepTwo()
{
    if(!$("#file1").val()){showErrorBox("File 1 is required!!"); return false;}
    if(!$("#file2").val()){showErrorBox("File 2 is required!!"); return false;}
    if(!$("#file3").val()){showErrorBox("File 3 is required!!"); return false;}
    if(!$("#file4").val()){showErrorBox("File 4 is required!!"); return false;}
    return true;    
}

function validateStepThree()
{
    if(!$("#link1").val()){showErrorBox("Link 1 is required!!"); return false;}
    if(!$("#link2").val()){showErrorBox("Link 2 is required!!"); return false;}
    if(!$("#link3").val()){showErrorBox("Link 3 is required!!"); return false;}
    if(!$("#link4").val()){showErrorBox("Link 4 is required!!"); return false;}
    return true;    
}

function checkResponseErrors()
{
    let url = window.location.href;
    if(url.includes('?')){
        // $data = json_decode($post_data); 

    }
}

$(document).ready(function(){

    init();
    $("#registerFormBtn").click(openModal);
    $("#closeModalBtn").click(closeModal);
    $("#nextBtn").click(nextStep);
    $("#prevBtn").click(prevStep);
    $("#closeError").click(closeErrorBox);
    checkResponseErrors();

    
});