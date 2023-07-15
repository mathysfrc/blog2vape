import { Controller } from '@hotwired/stimulus';
import L from "leaflet";

export default class extends Controller {
   static targets = ['jobOffer']; // eslint-disable-line

    connect() {
        let map = L.map('map').setView([47.9, 1.9], 11);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 19,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   }).addTo(map);
   
   for(let map of this.mapTargets){
    let marker = L.marker([map.dataset.latitude, map.dataset.longitude]).addTo(map);
    // marker.bindPopup(jobOffer.querySelector('h3').textContent);
    let popup = L.popup().setContent("h3").textContent;
    marker.bindPopup(popup);
    // marker.bindPopup(jobOffer.querySelector('h3').textContent , "test");

   }
     }
}