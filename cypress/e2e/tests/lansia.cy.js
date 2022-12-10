// add data for cypress

// the data table are called Lansia
// the first input is the Name ( String no number)
// the second input is Jenis Kelamin ( Enum between L and P )
// the third input is Usia ( Enum, but always choose the fifth option )
// the fourth input is Berat Badan ( Integer )
// the fifth input is Tensi ( Integer )

// the procedure is to always log-in first
// login credentials are admin@admin.com and password
// then go to /lansia

// then click on the button that says New

// then fill the form with the data mentioned above
// finally click on the button that says Create


describe ('Actions (Lansia tests)', () => {

    beforeEach(() => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email
        cy.get('input[name=email]').type('admin@admin.com')

        // type password (password)
        cy.get('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /home
        cy.url().should('include', '/home')

        // visit http://127.0.0.1:8000/lansia
        cy.visit('http://127.0.0.1:8000/lansia')
    })

    it ('lansia test (success)', () => {

        // click on the button that says New
        cy.get('a').contains('New').click()

        // type name
        cy.get('input[name=name]').type('Cypress Test Lansia')

        // select
        cy.get('select[name=jk]').select('L')

        // select the fifth option
        cy.get('select[name=usia]').select(5)

        // type berat badan
        cy.get('input[name=bb]').type(50)

        // type tensi
        cy.get('input[name=tensi]').type(100)

        // click on the button that says Create
        cy.get('button[type=submit]').click()

        // expect to be redirected to /lansia
        cy.url().should('include', '/lansia')

        // expect to have "Cypress Test Lansia"
        cy.contains('Cypress Test Lansia')
    })

    it ('lansia test (fail ( Empty Berat Badan ))', () => {

        // click on the button that says New
        cy.get('a').contains('New').click()

        // type name
        cy.get('input[name=name]').type('Cypress Test Lansia')

        // select
        cy.get('select[name=jk]').select('L')

        // select the fifth option
        cy.get('select[name=usia]').select(5)

        // type tensi
        cy.get('input[name=tensi]').type(100)

        // click on the button that says Create
        cy.get('button[type=submit]').click()

        // expect to be redirected to /lansia
        cy.url().should('include', '/lansia')
    })

    it ('lansia test (fail ( Empty Name ))', () => {

        // click on the button that says New
        cy.get('a').contains('New').click()

        // select
        cy.get('select[name=jk]').select('L')

        // select the fifth option
        cy.get('select[name=usia]').select(5)

        // type berat badan
        cy.get('input[name=bb]').type(50)

        // type tensi
        cy.get('input[name=tensi]').type(100)

        // click on the button that says Create
        cy.get('button[type=submit]').click()

        // expect to be redirected to /lansia
        cy.url().should('include', '/lansia')
    })

    it ('lansia test (fail ( Empty Tensi ))', () => {

        // click on the button that says New
        cy.get('a').contains('New').click()

        // type name
        cy.get('input[name=name]').type('Cypress Test Lansia')

        // select
        cy.get('select[name=jk]').select('L')

        // select the fifth option
        cy.get('select[name=usia]').select(5)

        // type berat badan
        cy.get('input[name=bb]').type(50)

        // click on the button that says Create
        cy.get('button[type=submit]').click()

        // expect to be redirected to /lansia
        cy.url().should('include', '/lansia')
    })

    it ('lansia test (fail ( Empty everything ))', () => {

            // click on the button that says New
            cy.get('a').contains('New').click()

            // click on the button that says Create
            cy.get('button[type=submit]').click()

            // expect to be redirected to /lansia
            cy.url().should('include', '/lansia')
    })
})
