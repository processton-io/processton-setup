<?php

namespace Processton\ProcesstonSetup\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;
class OperationalSetting extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'group_name',
        'sub_group',
        'title',
        'key',
        'type',
    ];

    protected $casts = [
        'value_json' => 'json',
        'value_text' => 'encrypted',
        'value_string' => 'encrypted',
    ];

    protected function key(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => strtolower($value),
        );
    }

    
    protected function getValueAttribute()
    {
        if($this->type === 'text'){
            return $this->value_text;
        } elseif($this->type === 'json'){
            return $this->value_json;
        }elseif($this->type === 'string'){
            return $this->value_string;
        }
    }
    protected function setValueAttribute($value)
    {
        if($this->type === 'text'){
            $this->__set('value_text' , $value);
        } elseif($this->type === 'json'){
            $this->__set('value_json' , $value);
        }elseif($this->type === 'string'){
            $this->__set('value_string' , $value);
        }
    }
}
