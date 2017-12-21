Feature:add an electronic
  Scenario:
    Given I have the current electronics:
    And want to add :
    """
    {"brand":"Sony","model":"J8","price":199}
    """
    When I request "POST /electronics"
    Then the response status code should be 201
    And I should have one more electronic

  Scenario:
    Given I have the current electronics:
    And want to add :
    """
    {"brand":"Sony","model":,"price":}
    """
    When I request "POST /electronics"
    Then the response status code should be 400
    And I should have one more electronic
