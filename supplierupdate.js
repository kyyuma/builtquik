var workval = $('#stype').val();

var currentar = 1;

var fab = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Welding and Fabrication"> Welding and Fabrication<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Metal Cutting"> Metal Cutting<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Processing"> Processing<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Galvanising"> Galvanising<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region."value="Distribution"> Distribution<br><p class="help-block text-danger"></p>';

var car = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Carpentry"> Carpentry<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Milling"> Milling<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Electrical"> Electrical<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Kitchen Fabrication"> Kitchen Fabrication<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Joinery"> Joinery<br><p class="help-block text-danger"></p>';

var mec = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Car"> Car<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Heavy Machinery Maintence"> Heavy Machinery Maintence<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Blue/pink slips for Registration"> Blue/pink slips for Registration<br><p class="help-block text-danger"></p>';

var pro = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Packaging and processing windows"> Packaging and processing windows<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Milling"> Milling<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Dorrs"> Dorrs<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Appliancies">Appliancies<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." Value="Wet-area suppliers"> Wet-area suppliers<br><p class="help-block text-danger"></p>';

var shed = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Other"> Other<br><p class="help-block text-danger"></p>';

var fabe = '<label>Capability</label><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Welders"> Welders<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Crane"> Crane<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Forklift"> Forklift<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Galvanising"> Galvanising<br><input name="sctype[]" type="checkbox" required="required" data-validation-required-message="Please enter your Region." value="Distribution"> Distribution<br><p class="help-block text-danger"></p>';

$('#stype').change(function () {
    workval = $('#stype').val();
    switch (workval){
        case "Fabrication":
                $('#workshopupdate').html(fab);
                break;
        case "Carpentry":
                $('#workshopupdate').html(car);
                break;
        case "Mechanics":
                $('#workshopupdate').html(mec);
                break;
        case "Products Distribution":
                $('#workshopupdate').html(pro);
                break;
        case "Shed/Factory Space":
                $('#workshopupdate').html(shed);
                break;
    }
});



$('#addnew').click(function(){
    $('#qual').append('<div class="control-group"><div class="form-group floating-label-form-group controls mb-0 pb-2"><label>Qualification Type</label><input class="form-control" type="text" placeholder="Qualification Type" name="sqtype[' + currentar + '][0]" required="required" data-validation-required-message="Please enter your Qualifications."><label>Number Qualified</label><input class="form-control" type="text" placeholder="Number Qualified"  name="sqtype[' + currentar + '][1]" required="required" data-validation-required-message="Please enter your Qualifications."></div><p class="help-block text-danger"></p></div>');
    currentar += 1;
});

$('#addnewcapa').click(function(){
    $('#capa').append($('#capab').html())});
 
