// add data for cypress

// the data table are called Dewasa
// the first input is the Name ( String no number )
// the second input is Jenis Kelamin ( Enum between L and P )
// the third input is Usia ( Enum, but always choose the sixth option )
// the fourth input is Berat Badan ( Integer ) as bb
// the fifth input is Tinggi Badan ( Integer ) as tb
// the sixth input is Tensi ( Integer )

// the procedure is to always log-in first
// login credentials are admin@admin.com and password
// then go to /dewasa

// then click on the button that says New

// then fill the form with the data mentioned above
// finally click on the button that says Create

describe ('Actions (Dewasa tests)', () => {

    beforeEach (() => {

        // visit http://127.0.0.1:8000/dewasa
        cy.visit ('http://127.0.0.1:8000/dewasa')

        // type email
        cy.get ('input[name=email]').type('admin@admin.com')

        // type password (password)
        cy.get ('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get ('button[type=submit]').click()

        // visit http://127.0.0.1:8000/dewasa
        cy.visit ('http://127.0.0.1:8000/dewasa')
    })

    it ('dewasa test (success)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Dewasa')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the sixth option
        cy.get ('select[name=usia]').select(6)

        // type berat badan
        cy.get ('input[name=bb]').type(55)

        // type tinggi badan
        cy.get ('input[name=tb]').type(160)

        // type tensi
        cy.get ('input[name=tensi]').type(110)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // check if the page got redirected to /dewasa
        cy.url ().should ('include', '/dewasa')

        // check if the page contains the name
        cy.contains ('Cypress Test Dewasa')
    })

    it ('dewasa test fail (no Berat Badan)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Dewasa')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the sixth option
        cy.get ('select[name=usia]').select(6)

        // type tinggi badan
        cy.get ('input[name=tb]').type(160)

        // type tensi
        cy.get ('input[name=tensi]').type(110)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/dewasa/create')
    })

    it ('dewasa test fail (no Tinggi Badan)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Dewasa')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the sixth option
        cy.get ('select[name=usia]').select(6)

        // type berat badan
        cy.get ('input[name=bb]').type(55)

        // type tensi
        cy.get ('input[name=tensi]').type(110)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/dewasa/create')
    })

    it ('dewasa test fail (no Tensi)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Dewasa')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the sixth option
        cy.get ('select[name=usia]').select(6)

        // type berat badan
        cy.get ('input[name=bb]').type(55)

        // type tinggi badan
        cy.get ('input[name=tb]').type(160)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/dewasa/create')
    })

    it ('dewasa test fail (no Name)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // select
        cy.get ('select[name=jk]').select('L')

        // select the sixth option
        cy.get ('select[name=usia]').select(6)

        // type berat badan
        cy.get ('input[name=bb]').type(55)

        // type tinggi badan
        cy.get ('input[name=tb]').type(160)

        // type tensi
        cy.get ('input[name=tensi]').type(110)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/dewasa/create')
    })

    it ('dewasa test fail (empty everything)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/dewasa/create')
    })
})
