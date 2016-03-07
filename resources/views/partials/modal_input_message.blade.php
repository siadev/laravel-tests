<!-- template for the modal component -->

<script type="x/template" id="modal-template">
 <div class="modal-mask" v-show="show" transition="modal">
  <div class="modal-wrapper">
   <div class="modal-container">

    <div class="modal-header">
     <slot name="header">
       default header
     </slot>
    </div>

    <div class="modal-body">
     <slot name="body">
      default body
     </slot>
    </div>

    {{--<div class="modal-footer">--}}
     {{--<slot name="footer">--}}


     {{--</slot>--}}
    {{--</div>--}}
   </div>
  </div>
 </div>
</script>
