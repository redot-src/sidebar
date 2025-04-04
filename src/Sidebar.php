<?php

namespace Redot\Sidebar;

class Sidebar
{
    /**
     * The items of the sidebar.
     */
    public array $items = [];

    /**
     * Create a new sidebar instance.
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Create a new sidebar instance statically.
     */
    public static function make(array $items = []): static
    {
        return new static($items);
    }

    /**
     * Add an item to the sidebar.
     */
    public function item(Item $item): static
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * Add multiple items to the sidebar.
     */
    public function items(array $items): static
    {
        foreach ($items as $item) {
            $this->item($item);
        }

        return $this;
    }

    /**
     * Get the items of the sidebar.
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
