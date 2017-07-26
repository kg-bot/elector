// Here we fetch list of regions for country and populate <select> element
function getRegions(selectElement)
{
    var countryID = selectElement.val();
    $.ajax({
        url: '/regions',
        method: 'get',
        data: {'countryID': countryID},
        success: function(response) {
            var selectRegion = $('.select-region[data-type="' + selectElement.data('type') + '"');
            selectRegion.attr('disabled', false)
                .empty()
                .focus()
                .append(response)
                .parent().removeClass('is-empty');
            selectRegion.siblings('.help-block').empty();

            getCities(selectRegion);

        }
    })
}

// Here we fetch list of cities for region and populate <select> element
function getCities(selectElement)
{
    var regionID = selectElement.val();
    $.ajax({
        url: '/cities',
        method: 'get',
        data: {'regionID': regionID},
        success: function(response) {
            selectCity = $('.select-city[data-type="' + selectElement.data('type') + '"')
            selectCity.attr('disabled', false)
                .empty()
                .focus()
                .append(response)
                .parent().removeClass('is-empty');
            selectCity.siblings('.help-block').empty();
        }
    })
}

$(function() {
    $("#voterSelectCountry, #candidateSelectCountry").change(function() {
        getRegions($(this));
    });
    $("#voterSelectRegion, #candidateSelectRegion").change(function() {
        getCities($(this));
    })
})