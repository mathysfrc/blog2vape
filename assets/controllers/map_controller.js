import { Controller } from '@hotwired/stimulus';
import L from "leaflet";

export default class extends Controller {
   static targets = ['map']; // eslint-disable-line

    connect() {
        let map = L.map('map').setView([47.9, 1.9], 11);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 19,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   }).addTo(map);
   
      let marker = L.marker([47.89, 1.89]).addTo(map);
   
     }
}