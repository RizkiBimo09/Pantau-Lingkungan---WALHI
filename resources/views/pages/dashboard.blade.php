@extends('layouts.main')

@section('container')
<div id="map" style="width : 100%;height : 500px;"></div>
<script>
var map = L.map('map').setView([51.505, -0.09], 13);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);
L.geoJSON(data).addTo(map);
</script>

@endsection