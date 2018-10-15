function Person(initialAge) {
    // add some more code to run some checks on initialAge
    this.age = initialAge;
    if(this.age < 0) {
        console.log('Age is not valid, setting age to 0.');
        age = 0;
    }

    this.amIOld = function() {
        // do some computations in here and print out the correct statement to the console.
        if(this.age < 13) {
            console.log('You are young');
        } else if (this.age >= 13 && this.age < 18) {
            console.log('You are a teenager');
        } else {
            console.log('You are old.');
        }
    };
    
    this.yearPasses = function() {
        // increment the age of the person in here
        this.age++
    }
}