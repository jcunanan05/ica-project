import Vue from 'vue';

let Modal = Vue.component('modal', 
  require('./Modal.vue'));

let ModalContent = Vue.component('modal-content', 
  require('./ModalContent.vue'));

let ModalCard = Vue.component('modal-card', 
  require('./ModalCard.vue'));

export {
  Modal,
  ModalContent,
  ModalCard
};