#include <bits/stdc++.h>
using namespace std;

//        1
//     /    \
//    2      3
//  /  \    /  \
// 4    5  6   7

struct node
{
    int data;
    struct node *left;
    struct node *right;

    node(int val)
    {
        data = val;
        left = NULL;
        right = NULL;
    }
};
void preorder(struct node *root)
{
    if (root == NULL)
    {
        return;
    }

    cout << root->data << " ";
    preorder(root->left);
    preorder(root->right);
}
void inorder(struct node *root)
{
    if (root == NULL)
    {
        return;
    }
    inorder(root->left);
    cout << root->data << " ";
    inorder(root->right);
}
void postorder(struct node *root)
{
    if (root == NULL)
    {
        return;
    }
    postorder(root->left);
    postorder(root->right);
    cout << root->data << " ";
}
void traversal(node *root)
{
    if (root == NULL)
    {
        return;
    }

    queue<node *> q;
    q.push(root);
    q.push(NULL);

    while (!q.empty())
    {
        node *temp = q.front();
        q.pop();
        if (temp != NULL)
        {
            cout << temp->data << " ";
            if (temp->left)
            {
                q.push(temp->left);
            }
            if (temp->right)
            {
                q.push(temp->right);
            }
        }
        else if (!q.empty())
        {
            q.push(NULL);
        }
    }
}
int sumOfK(node *root, int k)
{
    queue<node *> q;
    if (root == NULL)
    {
        return -1;
    }

    q.push(root);
    q.push(NULL);

    int l = 0;
    int sum = 0;

    while (!q.empty())
    {
        node *temp = q.front();
        q.pop();

        if (temp != NULL)
        {
            if (l == k)
            {
                sum = sum + temp->data;
            }
            if (temp->left)
            {
                q.push(temp->left);
            }
            if (temp->right)
            {
                q.push(temp->right);
            }
        }
        else if (!q.empty())
        {
            q.push(NULL);
            l++;
        }
    }

    return sum;
}
int nodeINtree(node *root)
{
    if (root == NULL)
    {
        return 0;
    }
    return nodeINtree(root->left) + nodeINtree(root->right) + 1;
}
int sumOfNodes(node *root)
{
    if (root == NULL)
    {
        return 0;
    }
    return sumOfNodes(root->left) + sumOfNodes(root->right) + root->data;
}
int heightOFtree(node *root) // time complex o(N)
{
    if (root == NULL)
    {
        return 0;
    }
    int l = heightOFtree(root->left);
    int r = heightOFtree(root->right);
    return max(l, r) + 1;
}
int diameter(node *root) // time complex o(n^2)
{
    if (root == NULL)
    {
        return 0;
    }
    int l = heightOFtree(root->left);
    int r = heightOFtree(root->right);
    int cd = l + r + 1;

    int ld = diameter(root->left);
    int rd = diameter(root->right);

    return max(cd, max(ld, rd));
}
int calDiameter(node *root, int *h) // time complex o(n)
{
    if (root == NULL)
    {
        *h = 0;
        return 0;
    }
    int l = 0, r = 0;
    int ld = calDiameter(root->left, &l);
    int rd = calDiameter(root->right, &r);

    int cd = ld + rd + 1;
    *h = max(l, r) + 1;

    return max(cd, max(ld, rd));
}
void sumreplacement(node *root) // time cimplex 0(n)
{
    if (root == NULL)
    {
        return;
    }

    sumreplacement(root->left);
    sumreplacement(root->right);

    if (root->left != NULL)
    {
        root->data += root->left->data;
    }

    if (root->right != NULL)
    {
        root->data += root->right->data;
    }
}
bool isbalaced(node *root)
{
    if (root == NULL)
    {
        return true;
    }

    if (isbalaced(root->left) == false)
    {
        return false;
    }
    if (isbalaced(root->right) == false)
    {
        return false;
    }

    int lh = heightOFtree(root->left);
    int rh = heightOFtree(root->right);

    if (abs(lh - rh) <= 1)
    {
        return true;
    }
    else
    {
        return false;
    }
}
void rightview(node *root)
{
    if (root == NULL)
    {
        return;
    }

    queue<node *> q;
    q.push(root);

    while (!q.empty())
    {
        int n = q.size();
        for (int i = 0; i < n; i++)
        {
            node *curr = q.front();
            q.pop();

            if (i == n - 1)
            {
                cout << curr->data << " ";
            }

            if (curr->left != NULL)
            {
                q.push(curr->left);
            }

            if (curr->right != NULL)
            {
                q.push(curr->right);
            }
        }
    }
}
void leftview(node *root)
{
    if (root == NULL)
    {
        return;
    }

    queue<node *> q;
    q.push(root);

    while (!q.empty())
    {
        int n = q.size();
        for (int i = 0; i < n; i++)
        {
            node *curr = q.front();
            q.pop();

            if (i == n - 1)
            {
                cout << curr->data << " ";
            }
            if (curr->right != NULL)
            {
                q.push(curr->right);
            }
            if (curr->left != NULL)
            {
                q.push(curr->left);
            }
        }
    }
}
vector<int> bottomView(node *root)
{
    // Your Code Here
    vector<int> ans;
    map<int, int> m;
    queue<pair<node *, int>> q;
    if (root == NULL)
    {
        return ans;
    }
    q.push({root, 0});
    while (!q.empty())
    {
        auto it = q.front();
        q.pop();
        node *node = it.first;
        int line = it.second;
        m[line] = node->data;

        if (node->left != NULL)
        {
            q.push({node->left, line - 1});
        }
        if (node->right != NULL)
        {
            q.push({node->right, line + 1});
        }
    }
    for (auto it : m)
    {
        ans.push_back(it.second);
    }
    return ans;
}
vector<int> topView(node *root)
{
    vector<int> ans;
    map<int, int> m;
    queue<pair<node *, int>> q;
    if (root == NULL)
    {
        return ans;
    }
    q.push({root, 0});
    while (!q.empty())
    {
        auto it = q.front();
        q.pop();
        node *node = it.first;
        int line = it.second;
        if (m.find(line) == m.end())
        {
            m[line] = node->data;
        }
        if (node->left != NULL)
        {
            q.push({node->left, line - 1});
        }
        if (node->right != NULL)
        {
            q.push({node->right, line + 1});
        }
    }
    for (auto it : m)
    {
        ans.push_back(it.second);
    }
    return ans;
}
node *lca(node *root, int n1, int n2)
{
    if (root == NULL)
    {
        return NULL;
    }
    if (root->data == n1 || root->data == n2)
    {
        return root;
    }

    node *l = lca(root->left, n1, n2);
    node *r = lca(root->right, n1, n2);

    if (l != NULL && r != NULL)
    {
        return root;
    }
    if (l == NULL && r == NULL)
    {
        return NULL;
    }

    if (l != NULL)
    {
        return lca(root->left, n1, n2);
    }

    return lca(root->right, n1, n2);
}
int findDistance(node *root, int k, int dist)
{
    if (root == NULL)
    {
        return -1;
    }

    if (root->data == k)
    {
        return dist;
    }

    int l = findDistance(root->left, k, dist + 1);
    if (l != -1)
    {
        return l;
    }

    return findDistance(root->right, k, dist + 1);
}
int distanceBetweenNodes(node *root, int n1, int n2)
{
    node *Lca = lca(root, n1, n2);

    int d1 = findDistance(Lca, n1, 0);
    int d2 = findDistance(Lca, n2, 0);
    return d1 + d2;
}
void flatten(node *root)
{
    if (root == NULL || root->left == NULL || root->right == NULL)
    {
        return;
    }

    if (root->left != NULL)
    {
        flatten(root->left);

        node *temp = root->right;
        root->right = root->left;
        root->left = NULL;

        node *t = root->right;
        while (t->right != NULL)
        {
            t = t->right;
        }

        t->right = temp;
    }

    flatten(root->right);
}
// case1
void printSubtreeNodes(node *root, int k)
{
    if (root == NULL || k < 0)
    {
        return;
    }

    if (k == 0)
    {
        cout << root->data << " ";
        return;
    }

    printSubtreeNodes(root->left, k - 1);
    printSubtreeNodes(root->right, k - 1);
}
// case2
int printNodesAtk(node *root, node *target, int k)
{
    if (root == NULL)
    {
        return -1;
    }

    if (root == target)
    {
        printSubtreeNodes(root, k);
        return 0;
    }

    int dl = printNodesAtk(root->left, target, k);
    if (dl != -1)
    {
        if (dl + 1 == k)
        {
            cout << root->data << " ";
        }
        else
        {
            printSubtreeNodes(root->right, k - dl - 2);
        }
        return 1 + dl;
    }

    int dr = printNodesAtk(root->right, target, k);
    if (dr != -1)
    {
        if (dr + 1 == k)
        {
            cout << root->data << " ";
        }
        else
        {
            printSubtreeNodes(root->left, k - dr - 2);
        }
        return 1 + dr;
    }

    return -1;
}
bool getPath(node *root, int n, vector<int> &p)
{
    if (root == NULL)
    {
        return false;
    }

    p.push_back(root->data);
    if (root->data)
    {
        return true;
    }

    if (getPath(root->left, n, p) || getPath(root->right, n, p))
    {
        return true;
    }
    p.pop_back();
    return false;
}
int LCA(node *root, int n1, int n2)
{
    vector<int> p1, p2;
    if (!getPath(root, n1, p1) || !getPath(root, n2, p2))
    {
        return -1;
    }

    int pc;
    for (pc = 0; pc < p1.size() && p2.size(); pc++)
    {
        if (p1[pc] != p2[pc])
        {
            break;
        }
    }

    return p1[pc - 1];
}
int maxPathSumUtil(node *root, int ans)
{
    if (root == NULL)
    {
        return 0;
    }
    int l = maxPathSumUtil(root->left, ans);
    int r = maxPathSumUtil(root->right, ans);

    int nodeMax = max(max(root->data, root->data + l + r), max(root->data + l, root->data + r));

    ans = max(ans, nodeMax);
    int singlePathSum = max(root->data, max(root->data + l, root->data + r));

    return singlePathSum;
}
int maxPathsum(node *root)
{
    if (root == NULL)
    {
        return 0;
    }
    int ans = INT_MIN;

    int a = root->data;
    int b = maxPathsum(root->left) + root->data;
    int c = maxPathsum(root->right) + root->data;
    int d = maxPathsum(root->left) + maxPathsum(root->right) + root->data;

    int temp = max(max(a, b), max(c, d));
    ans = max(ans, temp);

    return ans;
}

int main()
{
    struct node *root = new node(1);
    root->left = new node(2);
    root->right = new node(3);

    root->left->left = new node(4);
    root->left->right = new node(5);

    root->right->left = new node(6);
    root->right->right = new node(7);

    // preorder(root);
    // cout<<endl;
    // inorder(root);
    // cout<<endl;
    // postorder(root);

    // traversal(root);
    // cout<<endl;
    // cout<<sumOfK(root,2)<<endl;
    // cout<<nodeINtree(root)<<endl;
    // cout<<sumOfNodes(root)<<endl;
    // cout<<heightOFtree(root)<<endl;
    // cout<<diameter(root)<<endl;
    // int h=0;
    // cout<<calDiameter(root,&h)<<endl;
    // preorder(root);
    // cout<<endl;
    // sumreplacement(root);
    // preorder(root);
    // cout<<endl;
    // if(isbalaced(root))
    // {
    //     cout<<"BALANCED TREE"<<endl;
    // }
    // else
    // {
    //     cout<<"UNBALANCED TREE"<<endl;
    // }

    // rightview(root);
    // cout<<endl;
    // leftview(root);

    // cout<<distanceBetweenNodes(root,4,7)<<endl;
    // flatten(root);
    // inorder(root);
    // printNodesAtk(root , root->left->left , 1);

    // cout<<LCA(root,4,5);

    // cout<<maxPathsum(root);
    return 0;
}