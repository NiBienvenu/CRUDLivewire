<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Contacts ;

class ContactsComponent extends Component
{
    use WithFileUploads;
    public $contacts, $name,$prenom,$adresse,$numero,$profil, $description, $contact_id;
    public $updateContact = false;

    protected $listeners = [
        'deleteContact'=>'destroy'
        
    ];

    // Validation Rules
    protected $rules = [
        'name'=>'required',
        'prenom'=>'required',
        'adresse'=>'required',
        'numero'=>'required|numeric',
        'description'=>'required'
    ];

    public function render()
    {
        $this->contacts = Contacts::select('id','name','prenom','adresse','numero','profil','description')->get();
        
        return view('livewire.contacts-component');
    }

    public function resetFields(){
        $this->name = '';
        $this->prenom ='';
        $this->adresse ='';
        $this->numero ='';
        $this->description = '';
    }

   
    public function store(){
        $this->validate();

        // $imagePath = $this->profil->store('profil', 'public');
        $uploadedImage = $this->profil->store('images', 'public');

		// $image = time() . '.' . $profil->getClientOriginalExtension();
		$this->profil->storeAs('public/images', $profil);



        try{
            Contacts::create([
                'name'=>$this->name,
                'prenom'=>$this->prenom, 
                'adresse'=>$this->adresse, 
                'numero'=>$this->numero,
                'profil'=> $uploadedImage,
                'description'=>$this->description
            ]);
    
         

            $this->resetFields();
        }catch(\Exception $e){
        
            dd($e);
            $this->resetFields();
        }
    }

    public function edit($id){
        $contact = Contacts::findOrFail($id);
        $this->name = $contact->name;
        $this->prenom = $contact->prenom;
        $this->adresse = $contact->adresse;
        $this->numero = $contact->numero;
        $this->description = $contact->description;
        $this->contact_id = $contact->id;
        $this->updateContact = true;
    }

    public function cancel()
    {
        $this->updateContact = false;
        $this->resetFields();
    }

    public function update(){

        $this->validate();

        try{
            Contacts::find($this->contact_id)->fill([
                'name'=>$this->name,
                'prenom'=>$this->prenom, 
                'adresse'=>$this->adresse, 
                'numero'=>$this->numero,
                'description'=>$this->description
            ])->save();
          
    
            $this->cancel();
        }catch(\Exception $e){
           
            $this->cancel();
        }
    }

    public function destroy($id){
        try{
            Contacts::find($id)->delete();
        }catch(\Exception $e){
            
        }
    }
}