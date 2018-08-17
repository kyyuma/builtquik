var workval = $('#stype').val();

var fab = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Welding and Fabrication<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Metal Cutting<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Processing<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Galvanising<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Distribution<br><p class="help-block text-danger"></p>';

var car = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Carpentry<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Milling<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Electrical<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Kitchen Fabrication<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Joinery<br><p class="help-block text-danger"></p>';

var mec = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Car<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Heavy Machinery Maintence<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Blue/pink slips for Registration<br><p class="help-block text-danger"></p>';

var pro = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Packaging and processing windows<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Milling<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Dorrs<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region.">Appliancies<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Wet-area suppliers<br><p class="help-block text-danger"></p>';

var shed = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Other<br><p class="help-block text-danger"></p>';

var fabe = '<label>Capability</label><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Welders<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Crane<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Forlift<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Galvanising<br><input id="cregion" name="sregion" type="checkbox" required="required" data-validation-required-message="Please enter your Region."> Distribution<br><p class="help-block text-danger"></p>';

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
    $('#qual').append($('#qualo').html());
});

