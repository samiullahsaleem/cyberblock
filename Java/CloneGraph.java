public class CloneGraph{
public Node cloneGraph(Node node) {
	return (node == null) ? null : cloneGraph(node, new HashMap<>());
}

private Node cloneGraph(Node node, Map<Integer, Node> nodeByVal) {
	if (nodeByVal.containsKey(node.val))
		return nodeByVal.get(node.val);

	var clone = nodeByVal.computeIfAbsent(node.val, k -> new Node(node.val));
	for (var neighbor : node.neighbors)
		clone.neighbors.add(cloneGraph(neighbor, nodeByVal));
		
	return clone;
}
}
