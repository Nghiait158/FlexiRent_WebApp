
    const cityDistricts = {
        'Ho Chi Minh City': {
            name: 'Ho Chi Minh City',
            districts: [
                'District 1', 'District 2', 'District 3', 'District 4', 'District 5',
                'District 6', 'District 7', 'District 8', 'District 9', 'District 10',
                'District 11', 'District 12', 'Binh Thanh', 'Tan Binh', 'Phu Nhuan', 'Go Vap'
            ]
        },
        'Hanoi': {
            name: 'Hanoi',
            districts: [
                'Ba Dinh', 'Hoan Kiem', 'Hai Ba Trung', 'Dong Da', 'Cau Giay',
                'Tay Ho', 'Long Bien', 'Hoang Mai', 'Ha Dong', 'Thanh Xuan'
            ]
        },
        'Da Nang': {
            name: 'Da Nang',
            districts: [
                'Hai Chau', 'Thanh Khe', 'Son Tra', 'Ngu Hanh Son', 'Lien Chieu', 'Cam Le', 'Hoa Vang'
            ]
        },
        'Hue': {
            name: 'Hue',
            districts: [
                'Phu Hoi', 'Phu Nhuan', 'Vy Da', 'Xuan Phu', 'Thuy Bieu', 'Kim Long'
            ]
        }
        // Add more cities as needed
    };

    // Populate the city dropdown on page load
    window.onload = function() {
        const citySelect = document.getElementById("city");
        for (const cityCode in cityDistricts) {
            const option = document.createElement("option");
            option.value = cityCode;
            option.textContent = cityDistricts[cityCode].name;
            citySelect.appendChild(option);
        }
    };

    function updateDistricts() {
        const city = document.getElementById("city").value;
        const districtSelect = document.getElementById("district");
        districtSelect.innerHTML = '<option value="">Select District</option>'; // Clear previous options

        if (city && cityDistricts[city]) {
            cityDistricts[city].districts.forEach(function(district) {
                let option = document.createElement("option");
                option.value = district;
                option.textContent = district;
                districtSelect.appendChild(option);
            });
        }
    }
