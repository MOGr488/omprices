// In your JavaScript file

document.addEventListener('DOMContentLoaded', () => {
        console.log('My script is running!');
    const regionSelect = document.getElementById('Region');
    const citySelect = document.getElementById('Wilayah');

    regionSelect.addEventListener('change', () => {
        const regionId = regionSelect.value;

        // Make an AJAX request to retrieve the list of cities for the selected region
        fetch(`/cities?region_id=${regionId}`)
            .then(response => response.json())
            .then(cities => {
                // Clear the current options in the city select box
                citySelect.innerHTML = '<option value="">Select a city</option>';

                // Add the new options to the city select box
                cities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id;
                    option.text = city.wilayah;
                    citySelect.appendChild(option);
                });
            });
    });
});
