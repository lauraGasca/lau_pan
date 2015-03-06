<?php namespace Panaderia\Managers;


class ValidatorManager
{
    protected $type;
    protected $data;

    public function __construct($type, $data)
    {
        $this->type = $type;
        $this->data = array_only($data, array_keys($this->getRules()));
    }

    public function getRules()
    {
        switch($this->type)
        {
            case 'contacto':
                $rules = [
                    'nombre' =>  'required|max:100',
                    'correo' =>  'required|email',
                    'mensaje' =>  'required|max:500'
                ];
                break;
            case 'correo':
                $rules = [
                    'asunto' =>  'required|max:100',
                    'archivo' =>  'required|image'
                ];
                break;
            case 'producto':
                $rules = [
                    'id' =>  'required|exists:productos,id'
                ];
                break;
            case 'frase':
                $rules = [
                    'id' =>  'required|exists:frases,id'
                ];
                break;
            case 'suscripcion':
                $rules = [
                    'id' =>  'required|exists:suscripciones,id'
                ];
                break;
        }
        return $rules;
    }

    public function validar()
    {
        $rules = $this->getRules();

        $validation = \Validator::make($this->data, $rules);

        if($validation->fails())
        {
            throw new ValidationException('Error de Validacion', $validation->messages());
        }
    }

}

?>