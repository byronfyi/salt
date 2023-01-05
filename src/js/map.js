import 'mapbox-gl/dist/mapbox-gl.css';
import mapboxgl from 'mapbox-gl';

const map = () => {
  mapboxgl.accessToken = 'pk.eyJ1IjoiYndhbGtlcm1pbGxzIiwiYSI6ImNsMWtsZHRjbDAxenIzZGtxcGswbndmZGkifQ.ClC7xToAETkDIreIXBv5hA';

  const center = [-1.474661, 53.389457];

  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/bwalkermills/cl6gahws8005116pk1lcgg68p',
    center: center,
    zoom: 13,
  });

  const nav = new mapboxgl.NavigationControl();
  map.addControl(nav, 'top-right');

  map.scrollZoom.disable();

  // create the popup
  const popup = new mapboxgl.Popup({ offset: 25 }).setText(
  'Green Ln, Sheffield S3 8SE'
  );

  // create DOM element for the marker
  const el = document.createElement('div');
  el.id = 'marker';

  // create the marker
  new mapboxgl.Marker(el)
      .setLngLat(center)
      .setPopup(popup) // sets a popup on this marker
      .addTo(map);

  // Create a default Marker, colored black, rotated 45 degrees.
  // const marker = new mapboxgl.Marker({ color: '#FFB600' })
  // .setLngLat([-1.474661, 53.389457])
  // .addTo(map);
}

export default map;