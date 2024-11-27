<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $imageRules = "sometimes|image|mimes.jpeg,jpg,png|max:2046";
        ray($this->isMethod('post'));
        if ($this->isMethod('post')){
            $imageRules = "required|image|mimes:jpeg,jpg,png|max:2046";
        }
        return [
            "name" => "required|string|max:255",
            "description" => "required|string|max:2000",
            "image" =>$imageRules,
        ];
    }

    public function messages():array
    {
        return[
            "name.required" =>"La categoría es requerida",
            "name.string" =>"La categoría debe ser un texto",
            "name.max" => "La categoría no debe exceder los :max caracteres",
            "description.required" => "La descripción es requerida",
            "description.string" =>"La descripcion debe ser un texto",
            "description.max" => "La descripcion no debe exceder los :max caracteres",
            "image.image" =>"El archivo debe ser una imagen",
            "image.required" => "La imagen es obligatoria",
            "image.mimes" =>"La imagen debe ser de tipo: jpeg, png, jpg",
            "image.max" => "la imagen no debe exceder los :max Kilobytes",
        ];
    }
}
