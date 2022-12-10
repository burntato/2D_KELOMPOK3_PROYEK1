// add data for cypress

// the dat table are called Balita
// the first input is the Name ( String no number )
// the second input is Jenis Kelamin ( Enum between L and P )
// the third input is Usia ( Enum, but always choose the third option )
// the fourth input is Berat Badan ( Integer )

// the procedure is to always log-in first
// login credentials are admin@admin.com and password
// then go to /balita

// then click on the button that says New

// then fill the form with the data mentioned above
// finally click on the button that says Create

describe ('Actions (Balita tests)', () => {

    beforeEach (() => {

        // visit http://127.0.0.1:8000/login
        cy.visit ('http://127.0.0.1:8000/login')

        // type email
        cy.get ('input[name=email]').type('admin@admin.com')

        // type password (password)
        cy.get ('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get ('button[type=submit]').click()

        // expect to be redirected to /home
        cy.url ().should('include', '/home')

        // visit http://127.0.0.1:8000/balita
        cy.visit ('http://127.0.0.1:8000/balita')
    })

    it ('balita test (success)', () => {

         // click on the button that says New
        cy.get ('a').contains('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Balita')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the third option
        cy.get ('select[name=usia]').select(3)

        // type berat badan
        cy.get ('input[name=bb]').type(10)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to be redirected to /balita
        cy.url ().should('include', '/balita')

        // expect to see the name of the balita
        cy.get ('td').contains('Cypress Test Balita')
    })

    it ('balita test (fail ( Empty Berat Badan ))', () => {

        // click on the button that says New
        cy.get ('a').contains('New').click()

        // type name
        cy.get ('input[name=name]').type('Cypress Test Balita')

        // select
        cy.get ('select[name=jk]').select('L')

        // select the third option
        cy.get ('select[name=usia]').select(3)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to be stay in /balita/create
        cy.url ().should('include', '/balita/create')
    })

    it ('balita test (fail ( Empty Name ))', () => {

        // click on the button that says New
        cy.get ('a').contains('New').click()

        // select
        cy.get ('select[name=jk]').select('L')

        // select the third option
        cy.get ('select[name=usia]').select(3)

        // type berat badan
        cy.get ('input[name=bb]').type(10)

        // submit form (create button)
        cy.get ('button[type=submit]').click()

        // expect to be stay in /balita/create
        cy.url ().should('include', '/balita/create')
    })

    it ('balita test (fail ( Empty everything ))', () => {

        // click on the button that says New
        cy.get ('a').contains('New').click()

        // submit form (create button)
        cy.get ('button[type=submit]').click()

                // expect to be stay in /balita/create
        cy.url ().should('include', '/balita/create')
    })
})
