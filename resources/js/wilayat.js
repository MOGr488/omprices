document.addEventListener('DOMContentLoaded', () => {
    const regionSelect = document.getElementById('region');
    const citySelect = document.getElementById('city');

    regionSelect.addEventListener('change', () => {
        const regionId = regionSelect.value;

        if (!regionId) {
            citySelect.innerHTML = '<option value="">Select a city</option>';
            citySelect.disabled = true;
            return;
        }

        citySelect.innerHTML = '<option value="">Loading cities...</option>';
        citySelect.disabled = true;

        fetch(`/cities/${regionId}`)
            .then(response => response.json())
            .then(cities => {
                citySelect.innerHTML = '<option value="">Select a city</option>';
                cities.forEach(city => {
                    citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
                });
                citySelect.disabled = false;
            });
    });
});
