Feature: Add Electronic


  Scenario: User get electronic by id
    Given there are electronics:
      | id | brand   | model  | price |
      | 1  | Samsung | a2e300 |  123  |
      | 2  | Sony    | bravia |  324  |
    When I am on "/electronics/1"
    When I need  one "1" from electronics
    Then It should return :| 1  | Samsung | a2e300 |  123  | more electronic in electronics