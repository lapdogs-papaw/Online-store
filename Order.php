<?php
class Order {
    private $user;
    private $products = [];

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function addProduct(Product $product, $quantity) {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getDetails() {
        $details = "User: " . $this->user->getName() . "\n";
        $details .= "Products:\n";

        foreach ($this->products as $item) {
            $details .= "- " . $item['product']->getName() . " (Quantity: " . $item['quantity'] . ")\n";
        }

        return $details;
    }
}
?>
