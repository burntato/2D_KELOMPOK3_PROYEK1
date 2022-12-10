// add data for cypress

// the data table are called Remaja
// the first input is the Name ( String no number )
// the second input is Jenis Kelamin ( Enum between L and P )
// the third input is Usia ( Enum, but always choose the second option )
// the fourth input is Berat Badan ( Integer ) as bb
// the fifth input is Tinggi Badan ( Integer ) as tb
// the sixth input is Tensi ( Integer )
// the seventh input is Lingkar Lengan ( Integer ) as lila

// the procedure is to always log-in first
// login credentials are admin@admin.com and password
// then go to /remaja

// then click on the button that says New

// then fill the form with the data mentioned above
// finally click on the button that says Create

describe ('Actions (Remaja tests)', () => {

    beforeEach (() => {

        // visit http://http://127.0.0.1:8000/remaja
        cy.visit ('http://127.0.0.1:8000/remaja')

        // type email
        cy.get ('input[name=email]').type('admin@admin.com')

        // type password (password)
        cy.get ('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get ('button[type=submit]').click()

        // visit http://127.0.0.1:8000/remaja
        cy.visit ('http://127.0.0.1:8000/remaja')
    })

    it ('remaja test (success)', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Remaja')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type berat badan
        cy.get ('input[name=bb]').type(50)

        // type tinggi badan
        cy.get ('input[name=tb]').type(170)

        // type tensi
        cy.get ('input[name=tensi]').type(100)

        // type lingkar lengan
        cy.get ('input[name=lila]').type(7)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to be redirected to /remaja
        cy.url ().should ('include', '/remaja')

        // expect to see the name
        cy.get ('td').contains ('Cypress Test Remaja')
    })

    it ('remaja test (fail ( empty Berat badan ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Remaja')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type tinggi badan
        cy.get ('input[name=tb]').type(170)

        // type tensi
        cy.get ('input[name=tensi]').type(100)

        // type lingkar lengan
        cy.get ('input[name=lila]').type(7)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })

    it ('remaja test (fail ( empty Tinggi badan ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Remaja')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type berat badan
        cy.get ('input[name=bb]').type(50)

        // type tensi
        cy.get ('input[name=tensi]').type(100)

        // type lingkar lengan
        cy.get ('input[name=lila]').type(7)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })

    it ('remaja test (fail ( empty Tensi ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Remaja')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type berat badan
        cy.get ('input[name=bb]').type(50)

        // type tinggi badan
        cy.get ('input[name=tb]').type(170)

        // type lingkar lengan
        cy.get ('input[name=lila]').type(7)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })

    it ('remaja test (fail ( empty Lingkar lengan ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Remaja')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type berat badan
        cy.get ('input[name=bb]').type(50)

        // type tinggi badan
        cy.get ('input[name=tb]').type(170)

        // type tensi
        cy.get ('input[name=tensi]').type(100)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })

    it ('remaja test (fail ( empty Name ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // select
        cy.get ('select[name=jk]').select('L')

        // select the second option
        cy.get ('select[name=usia]').select(2)

        // type berat badan
        cy.get ('input[name=bb]').type(50)

        // type tinggi badan
        cy.get ('input[name=tb]').type(170)

        // type tensi
        cy.get ('input[name=tensi]').type(100)

        // type lingkar lengan
        cy.get ('input[name=lila]').type(7)

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })

    it ('remaja test (fail ( empty everything ) )', () => {

        // click on the button that says New
        cy.get ('a').contains ('New').click()

        // click on the button that says Create
        cy.get ('button[type=submit]').click()

        // expect to stay in the same page
        cy.url ().should ('include', '/remaja/create')
    })
})
