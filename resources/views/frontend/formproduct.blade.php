<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/formproduct.css">
</head>

<body>
    <div class="container">
        <h1>Shipping</h1>
        <p>Please enter your shipping details.</p>
        <hr />
        <div class="form">
            <form action="{{ url("/order/create") }}" method="POST">
                @csrf
                <input class="field__input" type="hidden" id="firstname" name="product_id" value="{{ $product['id']}}" required />
                <input class="field__input" type="hidden" id="firstname" name="total" value="{{ $product['price'] }}" required />
                <div class="fields fields--2">
                    <label class="field">
                        <span class="field__label" for="firstname">First Name</span>
                        <input class="field__input" type="text" id="firstname" name="firstname" required />
                        
                    </label>
                    <label class="field">
                        <span class="field__label" for="lastname">Last Name</span>
                        <input class="field__input" type="text" id="lastname" name="lastname" required />
                    </label>
                </div>
                <label class="field">
                    <span class="field__label" for="phone">Phone</span>
                    <input class="field__input" type="text" id="phone" name="phone" required />
                </label>
                <label class="field">
                    <span class="field__label" for="email">Email</span>
                    <input class="field__input" type="email" id="email" name="email" required />
                </label>
                <label class="field">
                    <span class="field__label" for="delivery_address">Delivery Address</span>
                    <input class="field__input" type="text" id="delivery_address" name="delivery_address" required />
                </label>
                <div class="fields fields--3">
                    <label class="field">
                        <span class="field__label" for="gender">Gender</span>
                        <select class="field__input" id="gender" name="gender" required>
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </label>
                    <label class="field">
                        <span class="field__label" for="birthday">Birthday</span>
                        <input class="field__input" id="birthday" type="date" name="birthday" required>
                    </label>
                    <label class="field">
                        <span class="field__label" for="city">City</span>
                        <input class="field__input" id="city" name="city" required>
                    </label>
                </div>
                <hr>
                <input type="submit" class="button" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
