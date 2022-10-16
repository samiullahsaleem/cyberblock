from django.shortcuts import render, redirect
from django.views.generic.list import ListView
from django.views.generic.detail import DetailView
from django.views.generic.edit import CreateView, UpdateView, DeleteView, FormView
from django.urls import reverse_lazy

from django.contrib.auth.views import LoginView
from django.contrib.auth.mixins import LoginRequiredMixin
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth import login



from .models import Task

#login Page
class CustomLogin(LoginView):
    template_name = 'base/loginpage.html'
    fields = '__all__'
    redirect_authenticated_user: True

    def get_success_url(self):
        return reverse_lazy('tasks')


#Register Page
class RegisterPage(FormView):
    template_name = 'base/register.html'
    form_class = UserCreationForm
    redirect_authenticated_user: True
    success_url = reverse_lazy('tasks')

    def form_valid(self, form):
        user = form.save()
        if user is not None:
            login(self.request, user)
        return super(RegisterPage, self).form_valid(form)

    #authentication user not allowd to register again
    def get(self, *args, **kwargs):
        if self.request.user.is_authenticated:
            return redirect('tasks')
        return super(RegisterPage, self).get(*args, **kwargs)


#Show Tasks
class TaskList(LoginRequiredMixin, ListView):
    model = Task
    template_name = 'base/task_list.html'
    context_object_name = 'tasks'
    
    #User Specific Data
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['tasks'] = context['tasks'].filter(user=self.request.user)
        context['count'] = context['tasks'].filter(complete=False).count()

        #search
        search_input = self.request.GET.get('search_area') or ''
        if search_input:
            context['tasks'] = context['tasks'].filter(title__startswith = search_input)

        context['search_input'] = search_input

        return context

#Give Detail about existing task
class DetailList(LoginRequiredMixin, DetailView):
    model = Task
    template_name = 'base/task_detail.html'
    context_object_name = 'tasks'

#Create new task
class CreateList(LoginRequiredMixin, CreateView):
    model = Task
    fields = ['title', 'description', 'complete']
    template_name = 'base/task_create.html'
    success_url = reverse_lazy('tasks')

    #Automatically know th current user that login
    def form_valid(self, form):
        form.instance.user = self.request.user
        return super(CreateList, self).form_valid(form)

#Update an existing task
class UpdateList(LoginRequiredMixin, UpdateView):
    model = Task
    fields = ['title', 'description', 'complete']
    template_name = 'base/task_create.html'
    success_url = reverse_lazy('tasks')

#Delete an existing task
class DeleteList(LoginRequiredMixin, DeleteView):
    model = Task
    context_object_name = 'task'
    template_name = 'base/task_delete.html'
    success_url = reverse_lazy('tasks')