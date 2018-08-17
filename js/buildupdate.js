var bayval = parseInt($('#baysnum').val());
var rooftype = $('#bays').val();
 

$('#baysnum').change(function () {
    bayval = parseInt($('#baysnum').val());
    update(bayval, rooftype);
    //$('#build').attr("src", pictureList[val]);
});

$('#bays').change(function () {
    rooftype = ($('#bays').val());
    update(bayval, rooftype);
    //$('#build').attr("src", pictureList[val]);
});

function update(val, roof){
    $('#build').attr("src", "img/builds/"+val+rooftype.toLowerCase()+".jpg")
}
update(bayval, rooftype)