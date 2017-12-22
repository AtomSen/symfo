Feature:Update an electronic

  Scenario:
    Given I have the current electronics:
    And want to add :
  """
  {"brand":"Sony","model":"J8","price":199}
  """
    When I request "POST /electronics"
    Then the response status code should be 201
    And I should have one more electronic
    And Want to update with:
    """
    {"brand":"Sony","model":"E95","price":1299}
    """
    When I request "PUT /electronics/"
    Then the response status code should be 204
    When  I request "DELETE /electronic/"
    Then the response status code should be 204
    And And I should have one less electronic

  Scenario:
    Given I have the current electronics:
    And want to add :
  """
  {"brand":"Sony","model":"J8","price":199}
  """
    When I request "POST /electronics"
    Then the response status code should be 201
    And I should have one more electronic
    And Want to update with:
    """
    {"brand":"Sony","model":"E95"}
    """
    When I request "PUT /electronics/"
    Then the response status code should be 400
    When  I request "DELETE /electronic/"
    Then the response status code should be 204
    And And I should have one less electronic