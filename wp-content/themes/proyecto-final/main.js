function initMap() {
    var lat1 = {
        lat: 9.9484768,
        lng: -84.1858212
    };
    var lat2 = {
        lat: 9.9766723,
        lng: -83.067162
    };
    var lat3 = {
        lat: 9.6968648,
        lng: -85.2114148
    }
    //9.9766723,-83.067162
    //9.9484768,-84.1858212
    //9.9484768,-84.1858212,12

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
        center: lat1
    });

    var marker = new google.maps.Marker({
        position: lat1,
        map: map,
        title: 'Hello World!'
    });

    var marker2 = new google.maps.Marker({
        position: lat2,
        map: map,
        title: 'Hello World!'
    });

    var marker3 = new google.maps.Marker({
        position: lat3,
        map: map,
        title: 'Hello World!'
    });
}