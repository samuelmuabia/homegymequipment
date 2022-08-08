const paypalPayment =(paymentAmount)=>{
  paypal.Buttons(
  {
      style:{
          color :'black'
      },
      createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: paymentAmount 
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            const nameText = document.getElementById('name');
            const name = nameText.value;
            const phoneNumberText = document.getElementById('phone-number');
            const phoneNumber = phoneNumberText.value;
            const addressText = document.getElementById('address');
            const address = addressText.value;
            window.location.href =("/hge/payment.php?paymentAmount="+paymentAmount+"&transaction_id="+transaction.id+"&name="+ name+"&address="+address+"&number="+ phoneNumber );
          });
        }
  }
  ).render('#paypal-btn')
  }