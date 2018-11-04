function processData(input) {
   let odd = '';
   let even = '';

   let inputs = input.split('\n');
   let length = parseInt(inputs[0]);
   let words = inputs.slice(1);

   for (let i = 0; i < length; i++) {
       for (let j = 0; j < words[i].length; j++) {
           if (j % 2) {
               even += words[i][j];
           } else {
               odd += words[i][j];
           }
           
       }
       console.log(`${odd} ${even}`);
       odd = '';
       even = '';
       
   }
}

processData('Jason');