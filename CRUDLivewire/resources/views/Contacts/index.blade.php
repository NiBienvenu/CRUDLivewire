
<div>
    <style>
       .row1 {
            border: 1px solid
       }
    </style>
    <h1 >Hello Word</h1>
   @foreach ($contacts as $contact)
       <div onclick="rowclick()" class="row1">
            <div class="col-3">
                <img src={{ $contact->profil }} alt="" srcset="">
            </div>
            <div class="col-9">
                <div class="row">
                    {{ $contact->nom }}  {{ $contact->prenom }}
                </div>
                <div class="row">
                    {{ $contact->numero }}
                </div>
            </div>
       </div>
   @endforeach
   <script>
    function rowclick() {
    }
   </script>
</div>
