function GetMap() {
    var map = new Microsoft.Maps.Map('#myMap', {
        credentials: 'Your Bing Maps Key',
        center: new Microsoft.Maps.Location(51.5985, 0.09941)
    });

    var center = map.getCenter();

    //Create custom Pushpin
    var pin = new Microsoft.Maps.Pushpin(center, {
        title: 'Lloyd Wright House',
        subTitle: 'London',
        text: '1'
    });

    //Add the pushpin to the map
    map.entities.push(pin);
}