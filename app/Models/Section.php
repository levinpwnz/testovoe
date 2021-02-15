<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Section extends BaseModel
{
    use HasFactory;

    protected $guarded = [];

    /**
     * This relation for Section entity to user
     * @return BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,
            'user_section',
            'section_id',
            'user_id');
    }
}
