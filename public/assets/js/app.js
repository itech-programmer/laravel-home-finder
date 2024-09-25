$(document).ready(function() {
    $('#search-form input').on('input', function() {
        var name = $('#name-input').val();
        var price = $('#price-input').val();
        var bedrooms = $('#bedrooms-input').val();
        var bathrooms = $('#bathrooms-input').val();
        var storeys = $('#storeys-input').val();
        var garages = $('#garages-input').val();

        $.ajax({
            url: '/api/houses/search',
            method: 'GET',
            data: {
                name: name,
                price: price,
                bedrooms: bedrooms,
                bathrooms: bathrooms,
                storeys: storeys,
                garages: garages
            },
            success: function(response) {
                var tbody = $('#results-table tbody');
                tbody.empty();

                if (response.length > 0) {
                    response.forEach(function(house) {
                        var row = '<tr>' +
                            '<td>' + house.name + '</td>' +
                            '<td>' + house.price + '</td>' +
                            '<td>' + house.bedrooms + '</td>' +
                            '<td>' + house.bathrooms + '</td>' +
                            '<td>' + house.storeys + '</td>' +
                            '<td>' + house.garages + '</td>' +
                            '</tr>';
                        tbody.append(row);
                    });
                } else {
                    var noResultsRow = '<tr>' +
                        '<td colspan="6" class="text-center">Результаты не найдены</td>' +
                        '</tr>';
                    tbody.append(noResultsRow);
                }
            }
        });
    });
});
