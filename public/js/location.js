    var restaurantLatitude;
    var restaurantLongitude;
    var buttons = document.getElementsByClassName('UserMenu');

    function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else  {
    alert("浏览器不支持地理位置功能。");
  }

}

    function showPosition(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      console.log("User's current location:", latitude, longitude);

      // 在这里可以将获取到的经纬度发送到服务器进行处理或进行位置判断
      checkIfInRestaurant(latitude, longitude);
    }

    function checkIfInRestaurant(latitude, longitude) {
      // 使用 OpenStreetMap 的 Nominatim API 获取餐厅位置
      var address = latitude+','+longitude;

      var apiUrl = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(address);

      fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
          if (data && data.length > 0) {
            restaurantLatitude = parseFloat(data[0].lat);
            restaurantLongitude = parseFloat(data[0].lon);

            var distance = calculateDistance(latitude, longitude, restaurantLatitude, restaurantLongitude);

            
            if (distance <=1) {
          
              enableButtons();

            } else {
              alert("您不在餐厅内，无法点餐。");
              disableButtons();

            }

            // 在地图上显示餐厅位置（可选）
            showRestaurantLocation(restaurantLatitude, restaurantLongitude);
          } else {
            alert("无法获取餐厅位置。");
            
          }
        })
        function enableButtons() {
            for (var i = 0; i < buttons.length; i++) {
              buttons[i].disabled = false;
            }
          }
          
          function disableButtons() {
            for (var i = 0; i < buttons.length; i++) {
              buttons[i].disabled = true;
            }
          }
    }

    function showRestaurantLocation(latitude, longitude) {
      var map = L.map('map').setView([latitude, longitude], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([latitude, longitude]).addTo(map);
    }

    function calculateDistance(lat1, lon1, lat2, lon2) {
      var R = 6371; // 地球半径（单位：千米）
      var dLat = deg2rad(lat2 - lat1);
      var dLon = deg2rad(lon2 - lon1);
      var a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) *
        Math.sin(dLon / 2) * Math.sin(dLon / 2);
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      var distance = R * c; // 两点间距离（单位：千米）
      return distance;
    }

    function deg2rad(deg) {
      return deg * (Math.PI / 180);
    }


