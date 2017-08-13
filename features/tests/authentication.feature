Feature:
  Authentication testing

  Background:
    Given user "test" exists

  Scenario: Login in with existing user
    Given I login as "test"
    Then page should contain "You are logged in!"

  Scenario: Login in with not existing user
    Given I login as "notexistinguser"
    Then page should not contain "You are logged in!"

  Scenario: Logout while logged in
    Given I login as "test"
    And I follow "Logout"
    Then I should see "Please login"

  Scenario: Logout while not logged in
    Given I am on "/logout"
    Then I should see "Please login"