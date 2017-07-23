Feature:
  Authentication testing

  Background:
    Given user "test" exists

  Scenario: Loggin in with existing user
    Given I login as "test"
    Then page should contain "You are logged in!"

  Scenario: Loggin in with not existing user
    Given I login as "notexistinguser"
    Then page should not contain "You are logged in!"

